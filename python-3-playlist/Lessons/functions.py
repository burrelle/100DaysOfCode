# def greet(name = 'Chad' , time = 'morning' ):
#   print(f'Good {time} {name}, hope you are well')

# name = input('Enter your name: ')
# time = input('Enter the time of day: ')

# greet()
# greet('Evan', 'night')
# greet(name='Shawn')

def area(radius):
  return (3.142 * radius ** 2)

def vol(area, length):
  print(area * length)

radius = int(input("Enter a radius: "))
length = int(input("Enter a lenght: "))

vol(area(radius), length)


  