CREATE TABLE AppUser(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  FirstName  VARCHAR2(30) NOT NULL,
  Surname VARCHAR2(30) NOT NULL,
  BusinessId VARCHAR2(30) NOT NULL,
  Email VARCHAR2(50) NOT NULL,
  EncryptedPassword CHAR(32) NOT NULL,
  SALT CHAR(32) NOT NULL
);

CREATE TABLE Patient(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  FirstName VARCHAR2(30) NOT NULL,
  Surname VARCHAR2(30) NOT NULL,
  Gender CHAR(1) NOT NULL,
  DoB DATE NOT NULL,
  EthnicityId NUMBER(10) NOT NULL CONSTRAINT patient_lookUp_fkey REFERENCES CommonLookUp (Id)
  );

CREATE TABLE MedicalRecord(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  MRN VARCHAR(30) NOT NULL  
);

CREATE TABLE MetricRecord(
  Id NUMBER(10) PRIMARY KEY NOT NULL,
  MrnId NUMBER(10) NOT NULL CONSTRAINT metricRecord_mrn_fkey REFERENCES MedicalRecord (Id),
  MetricTypeId NUMBER(10) NOT NULL CONSTRAINT metricRecord_metricType_fkey REFERENCES MetricType (Id),
  VarValue VARCHAR2(30),
  NumValue NUMBER(5),
  DecValue NUMBER(5, 2),
  Description VARCHAR2(100),
  EffectiveDate DATE DEFAULT sysdate NOT NULL
);

CREATE TABLE Demographic(
  MrnId NUMBER(10) NOT NULL CONSTRAINT demo_mrn_fkey REFERENCES MedicalRecord (Id),
  DiagnosisDate DATE NOT NULL,
  DiabetesTypeId NUMBER(10) NOT NULL CONSTRAINT demo_diabetes_fkey REFERENCES DiabetesType (Id),  
  Antibodies VARCHAR(30),  -- Need to ask
  Sh NUMBER(5),  
  Dka NUMBER(5),  
  Pump NUMBER(5),  
  Weight NUMBER(5, 2),  
  Height NUMBER(5, 2)
);