ninja_belts = {}

while True:
  ninja_name = input('Enter a ninja name: ')
  ninja_belt = input('Enter a belt color: ')
  ninja_belts[ninja_name] = ninja_belt
  
  another = input("Another? Y/N ")
  if another == 'Y':
    continue
  else:
    break

# def print_ninjas(dict):
#   for key, val in dict.items():
#     print(f'Hello my name is {key}, I am a {val} belt')

# print_ninjas(ninja_belts)

def belt_count(dict):
  belts = list(dict.values())
  for b in set(belts):
    num = belts.count(b)
    print(f'There are {num} {b} belts')

belt_count(ninja_belts)