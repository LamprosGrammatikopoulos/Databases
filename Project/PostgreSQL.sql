DROP TABLE IF exists org_cou_tmp;
CREATE TABLE org_cou_tmp(
name_org VARCHAR(100),
year_of_creation INTEGER,
website VARCHAR(1000),
number_of_employees INTEGER,
org_id VARCHAR(100),
cou_id VARCHAR(100),
name_cou VARCHAR(100),
aliases VARCHAR(1000),
description VARCHAR(100));

DROP TABLE IF exists org_per_tmp;
CREATE TABLE org_per_tmp(
org_id VARCHAR(100),
per_id VARCHAR(100),
role VARCHAR(100));

DROP TABLE IF exists org_sto_tmp;
CREATE TABLE org_sto_tmp(
org_id VARCHAR(100),
sto_id VARCHAR(100));

DROP TABLE IF exists per_cou_tmp;
CREATE TABLE per_cou_tmp(
first_name VARCHAR(100),
last_name VARCHAR(100),
date_of_birth VARCHAR(100),
sex VARCHAR(10),
occupation_id VARCHAR(100),
per_id VARCHAR(100),
cou_id VARCHAR(100),
name VARCHAR(100),
aliases VARCHAR(1000),
description VARCHAR(1000));

DROP TABLE IF exists stock_tmp;
CREATE TABLE stock_tmp(
id VARCHAR(100),
label VARCHAR(100),
aliases VARCHAR(1000),
description VARCHAR(1000));



INSERT INTO org_cou_tmp(name_org,year_of_creation,website,number_of_employees,org_id,cou_id,name_cou,aliases,description)
SELECT name_org,year_of_creation,website,number_of_employees,org_id,cou_id,name_cou,aliases,description
from org_cou_tmp1;

INSERT INTO org_per_tmp(org_id,per_id,role)
SELECT org_id,per_id,role
from org_per_tmp1;

INSERT INTO org_sto_tmp(org_id,sto_id)
SELECT org_id,sto_id
from org_sto_tmp1;

INSERT INTO per_cou_tmp(first_name,last_name,date_of_birth,sex,occupation_id,per_id,cou_id,name,aliases,description)
SELECT first_name,last_name,date_of_birth,gender,occupation_id,per_id,cou_id,name,aliases,description
from per_cou_tmp1;

INSERT INTO stock_tmp(id,label,aliases,description)
SELECT id,label,aliases,description
from stock_tmp1;

------------------------------------------------------------------------------------------------------

DROP TABLE IF exists stockmarket CASCADE;
CREATE TABLE stockmarket(
id SERIAL PRIMARY KEY,
sec_id VARCHAR(100) UNIQUE,
name VARCHAR(100),
alternativename VARCHAR(100),
description VARCHAR(1000));

DROP TABLE IF exists person CASCADE;
CREATE TABLE person(
id SERIAL PRIMARY KEY,
sec_id  VARCHAR(100) UNIQUE,
name VARCHAR(100),
lastname VARCHAR(100),
sex VARCHAR(10),
date_of_birth VARCHAR(100),
professioncode VARCHAR(100));

DROP TABLE IF exists country CASCADE;
CREATE TABLE country(
id SERIAL PRIMARY KEY,
sec_id VARCHAR(100) UNIQUE,
name VARCHAR(100),
alternativename VARCHAR(1000),
description VARCHAR(1000));

DROP TABLE IF exists organization CASCADE;
CREATE TABLE organization(
id SERIAL PRIMARY KEY,
sec_id VARCHAR(100) UNIQUE,
name VARCHAR(100),
year_of_creation INTEGER,
url VARCHAR(1000),
numofemployees INTEGER);

DROP TABLE IF exists citizen CASCADE;
CREATE TABLE citizen(
id SERIAL PRIMARY KEY,
personid INTEGER,
countryid INTEGER,
FOREIGN KEY(personid) REFERENCES person(id),
FOREIGN KEY(countryid) REFERENCES country(id) ON DELETE CASCADE);

DROP TABLE IF exists operate CASCADE;
CREATE TABLE operate(
id SERIAL PRIMARY KEY, 
organizationid INTEGER,
countryid INTEGER,
FOREIGN KEY(organizationid) REFERENCES organization(id) ON DELETE CASCADE,
FOREIGN KEY(countryid) REFERENCES country(id) ON DELETE CASCADE);

DROP TABLE IF exists related CASCADE;
CREATE TABLE related(
id SERIAL PRIMARY KEY,
role VARCHAR(100),
personid INTEGER,
organizationid INTEGER,
FOREIGN KEY(personid) REFERENCES person(id) ON DELETE CASCADE,
FOREIGN KEY(organizationid) REFERENCES organization(id) ON DELETE CASCADE);

DROP TABLE IF exists connected CASCADE;
CREATE TABLE connected(
id SERIAL PRIMARY KEY,
stockmarketid INTEGER,
organizationid INTEGER,
FOREIGN KEY(stockmarketid) REFERENCES stockmarket(id) ON DELETE CASCADE,
FOREIGN KEY(organizationid) REFERENCES organization(id) ON DELETE CASCADE);





INSERT INTO stockmarket(sec_id,name,alternativename,description) 
SELECT DISTINCT id,label,aliases,description FROM stock_tmp;

INSERT INTO person(sec_id,name,lastname,sex,date_of_birth,professioncode) 
SELECT DISTINCT per_id,first_name,last_name,sex,date_of_birth,occupation_id FROM per_cou_tmp;

INSERT INTO country(sec_id,name,alternativename,description) 
SELECT DISTINCT cou_id,name,aliases,description FROM per_cou_tmp
UNION
SELECT DISTINCT cou_id,name_cou,aliases,description FROM org_cou_tmp;

INSERT INTO organization(sec_id,name,year_of_creation,url,numofemployees) 
SELECT DISTINCT org_id,name_org,year_of_creation,website,number_of_employees FROM org_cou_tmp;

INSERT INTO citizen(personid,countryid) SELECT DISTINCT person.id,country.id FROM per_cou_tmp,country,person
where per_id=person.sec_id and cou_id=country.sec_id;

INSERT INTO operate(organizationid,countryid) SELECT DISTINCT organization.id,country.id FROM org_cou_tmp,country,organization
where org_id=organization.sec_id and cou_id=country.sec_id;

INSERT INTO related(personid,role,organizationid) SELECT DISTINCT person.id,org_per_tmp.role, organization.id FROM org_per_tmp,organization,person
where org_id=organization.sec_id and per_id=person.sec_id;

INSERT INTO connected(stockmarketid,organizationid) SELECT DISTINCT stockmarket.id,organization.id FROM org_sto_tmp,stockmarket,organization
WHERE org_id=organization.sec_id and sto_id=stockmarket.sec_id;




----------------------------------1-----------------
SELECT organization.name AS organization 
FROM connected,stockmarket,organization
WHERE stockmarket.id=connected.stockmarketid 
AND organization.id=connected.organizationid 
AND stockmarket.name='Athens Stock Exchange';


----------------------------------2-------------------
SELECT DISTINCT organization.name AS organization, organization.numofemployees AS employees, COUNT(operate.countryid) 
FROM operate,organization
WHERE organization.id=operate.organizationid
GROUP BY organization.name,organization.numofemployees;

------------------------------3----------------------
SELECT DISTINCT professioncode,count(professioncode) 
FROM person
GROUP BY professioncode; 

SELECT DISTINCT professioncode,organization.name AS organization, COUNT(professioncode) AS number_of_workers_per_prof_and_org 
FROM person,organization,related
WHERE person.id=related.personid
AND organization.id=related.organizationid
GROUP BY professioncode,organization.name
HAVING count(professioncode)>0 and count(professioncode)<10;

-----------------------------4--------------------------
(SELECT DISTINCT role, COUNT(role)
FROM related
GROUP BY role
ORDER BY COUNT(role) DESC
LIMIT 1)
UNION
(SELECT DISTINCT role, COUNT(role)
FROM related
GROUP BY role
ORDER BY COUNT(role) ASC
LIMIT 1);

----------------------------5--------------------------
SELECT DISTINCT country.name, COUNT(personid)
FROM country,citizen,person
WHERE country.id=citizen.countryid AND person.id=citizen.personid
GROUP BY country.name
ORDER BY COUNT(personid) DESC
LIMIT 1
OFFSET 1;

----------------------------6--------------------------
SELECT DISTINCT organization.name, COUNT(person.sex)
FROM organization,person,related
WHERE organization.id=related.organizationid 
AND person.id=related.personid
GROUP BY organization.name,person.sex
HAVING person.sex='male'
ORDER BY COUNT(person.sex) desc
LIMIT 1;


----------------------------7--------------------------
SELECT DISTINCT person.name
FROM organization,person,related,stockmarket,connected
WHERE organization.id=related.organizationid 
AND person.id=related.personid
AND stockmarket.id=connected.stockmarketid
AND organization.id=connected.organizationid
AND stockmarket.name='B3'
GROUP BY person.name;


----------------------------8--------------------------
SELECT DISTINCT organization.name
FROM organization,person,related,country,operate
WHERE organization.id=related.organizationid 
AND person.id=related.personid
AND country.id=operate.countryid
AND organization.id=operate.organizationid
GROUP BY organization.name
HAVING COUNT(operate.organizationid)>6 AND count(related.personid)>9;


----------------------------9--------------------------
SELECT DISTINCT organization.name,country.name
FROM organization,country,operate
WHERE country.id=operate.countryid
AND organization.id=operate.organizationid
AND (country.name='Greece' OR country.name='Egypt')
GROUP BY country.name,organization.name;


----------------------------10--------------------------
SELECT DISTINCT organization.name
FROM organization,stockmarket,connected
WHERE stockmarket.id=connected.stockmarketid
AND organization.id=connected.organizationid
AND stockmarket.name='Chicago Stock Exchange'
GROUP BY organization.name
INTERSECT
SELECT DISTINCT organization.name
FROM organization,stockmarket,connected
WHERE stockmarket.id=connected.stockmarketid
AND organization.id=connected.organizationid
AND stockmarket.name!='NASDAQ'
GROUP BY organization.name;


----------------------------11--------------------------
SELECT DISTINCT person.name,person.lastname
FROM organization,person,related,operate,country,citizen
WHERE organization.id=related.organizationid
AND person.id=related.personid
AND organization.name='Vodafone'
AND organization.id=operate.organizationid
AND person.id=citizen.personid
AND country.id=citizen.countryid
AND citizen.countryid!=operate.countryid;


----------------------------12--------------------------
SELECT DISTINCT organization.name AS organization, stockmarket.name AS stockmarket, country.name AS country
FROM organization,stockmarket,connected,operate,country
WHERE organization.id=connected.organizationid
AND stockmarket.id=connected.stockmarketid
AND organization.id=operate.organizationid
AND country.id=operate.countryid
ORDER BY organization.name;


----------------------------13--------------------------
SELECT DISTINCT person.name,person.lastname
FROM person,country,citizen,organization,operate,related
WHERE person.id=citizen.personid
AND country.id=citizen.countryid
AND organization.id=operate.organizationid
AND country.id=operate.countryid
AND person.id=related.personid
AND organization.id=related.organizationid;


----------------------------14--------------------------
SELECT DISTINCT person.name,person.lastname,DATE_PART('year',CURRENT_DATE) - DATE_PART('year',TO_DATE(person.date_of_birth,'YYYY/MM/DD')) AS Age
FROM person
ORDER BY DATE_PART('year',CURRENT_DATE) - DATE_PART('year',TO_DATE(person.date_of_birth,'YYYY/MM/DD')) ASC
LIMIT 1;

SELECT DISTINCT organization.name AS organization, country.name AS country, Count(person.name) AS number_of_employees_per_country
FROM organization,country,person,citizen,related
WHERE organization.id=related.organizationid
AND person.id=related.personid
AND person.id=citizen.personid
AND country.id=citizen.countryid
GROUP BY organization.name,country.name
ORDER BY organization.name,country.name;

-----σε ένα----

SELECT DISTINCT organization.name AS organization, country.name AS country, Count(person.name) AS number_of_employees_per_country, MIN(DATE_PART('year',CURRENT_DATE) - DATE_PART('year',TO_DATE(person.date_of_birth,'YYYY/MM/DD'))) AS Age
FROM organization,country,person,citizen,related
WHERE organization.id=related.organizationid
AND person.id=related.personid
AND person.id=citizen.personid
AND country.id=citizen.countryid
GROUP BY organization.name,country.name
ORDER BY organization.name,country.name;



