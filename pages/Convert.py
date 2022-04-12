import pandas as pd

pdObj = pd.read_json('Data.json', orient='index')
print(pdObj)

csvData = pdObj.to_csv('Nodes.csv', index=False)
