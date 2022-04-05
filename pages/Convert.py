import pandas as pd
import json
import csv

pdObj = pd.read_json('Data.json', orient='index')
print(pdObj)

data_file = open('Nodes.csv', 'w', newline='')
csv_writer = csv.writer(data_file)

count = 0
for data in pdObj:
    if count == 0:
        header = data.keys()
        csv_writer.writerow(header)
        count += 1
    csv_writer.writerow(data.values())

csv_writer.close()
