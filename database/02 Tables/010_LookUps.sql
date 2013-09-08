CREATE TABLE DiabetesType(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  Description VARCHAR2(30) NOT NULL
);

CREATE TABLE MetricType(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  Description VARCHAR2(30) NOT NULL,
  DefaultValue VARCHAR2(30) NOT NULL
);

CREATE TABLE Centre(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  Description VARCHAR2(30) NOT NULL,
  MrnPrefix VARCHAR(5) NOT NULL
);


CREATE TABLE CommonLookUp(
   Id NUMBER(10) PRIMARY KEY NOT NULL,
   LookUpType NUMBER(6) NOT NULL, -- 1 EthnicityType
   Description VARCHAR(30) NOT NULL
);