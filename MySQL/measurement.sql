CREATE TABLE MEASURMENT
(measurementID int,
Temperature int,
Humidity double,
CO2 double,
NodeID int,
PRIMARY KEY (measurementID)),
FOREIGN KEY (NodeID) REFERENCES NODE(NodeID)
;
