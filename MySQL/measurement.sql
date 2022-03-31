CREATE TABLE MEASURMENT
(measurementID int NOT NULL AUTO_INCREMENT,
Temperature int,
Humidity double,
CO2 double,
NodeID int,
PRIMARY KEY (measurementID)),
FOREIGN KEY (NodeID) REFERENCES NODE(NodeID)
;
