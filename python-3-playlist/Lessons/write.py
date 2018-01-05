#write to a file.
with open('files/write.txt', 'w') as write_file:
  write_file.write('Hey there python learning is pretty cool')
  write_file.write('\nLet\'s add another line to the file')

#append to a file
with open('files/write.txt', 'a') as write_file_again:
  write_file_again.write('\nLet\'s add another line to the file')

quotes = [
    '\nI can resist everything except temptation',
    '\nWe are all in the gutter, but some of us are looking at the stars',
    '\nAlways forgive your enemies - nothing annoys them so much'
]

with open('files/write.txt', 'a') as write_file:
  write_file.writelines(quotes)