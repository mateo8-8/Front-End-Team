CREATE TABLE MEASUREMENT
(MeasurementID int NOT NULL AUTO_INCREMENT,
Temperature int,
Humidity double,
CO2 double,
NodeID int NOT NULL,
PRIMARY KEY (MeasurementID),
FOREIGN KEY (NodeID) REFERENCES NODE(NodeID));

INSERT INTO MEASUREMENT (Temperature, Humidity, CO2, NodeID) VALUES (72, 2.2, 9.9, 1);
INSERT INTO MEASUREMENT (Temperature, Humidity, CO2, NodeID) VALUES (84, 6.8, 5.1, 1);
INSERT INTO MEASUREMENT (Temperature, Humidity, CO2, NodeID) VALUES (90, 0.7, 3.9, 2);