import sys, json, base64

try:
	data = json.loads(sys.argv[1])
except:
	print("Error")
	sys.exit(1)

result = {'status' : 'Yes!'}

print json.dumps(result)