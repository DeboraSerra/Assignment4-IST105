import sys

title_template = '<h1 style="text-align: center; font-size: 32px; font-weight: bold;">Assignment 4</h1>\n'

error_template = '<h2 style="color: red; font-size: 18px;">Error</h2>\n<p>{{message}}</p>'

warning_template = '<h2 style="color: orange; font-size: 18px;">Warning</h2>\n<p>{{message}}</p>'

result_template = '<h2 style="font-size: 24px;">Result</h2>\n<p>{{result}}</p>'

try:
  a, b, c = map(int, sys.argv[1:])
except ValueError:
  print(title_template + error_template.replace('{{message}}', 'All values must be integers.'))
  sys.exit()

if a < b:
  print(title_template + error_template.replace('{{message}}', 'The input a is too small.'))
elif b == 0:
  print(title_template + warning_template.replace('{{message}}', 'The input b will not affect the result.'))
elif c < 0:
  print(title_template + error_template.replace('{{message}}', 'The input c is negative.'))
elif c >= 0:
  result = c ** 3
  if result > 1000:
    result = (result ** 0.5) * 10
  else:
    result = (result ** 0.5) / a
  result += b
  print(title_template + result_template.replace('{{result}}', str(result)))
