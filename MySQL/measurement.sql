CREATE TABLE MEASUREMENT
(MeasurementID int NOT NULL AUTO_INCREMENT,
Temperature int,
Humidity double,
CO2 double,
NodeID int NOT NULL,
MeasurementTime datetime,
RiskFactor int,
PRIMARY KEY (MeasurementID),
FOREIGN KEY (NodeID) REFERENCES NODE(NodeID));

INSERT INTO MEASUREMENT (Temperature, Humidity, CO2, NodeID, MeasurementTime, RiskFactor) VALUES (72, 2.2, 9.9, 1, "2011-12-18 13:17:17", 35);
INSERT INTO MEASUREMENT (Temperature, Humidity, CO2, NodeID, MeasurementTime, RiskFactor) VALUES (84, 6.8, 5.1, 1);
INSERT INTO MEASUREMENT (Temperature, Humidity, CO2, NodeID, MeasurementTime, RiskFactor) VALUES (90, 0.7, 3.9, 2);