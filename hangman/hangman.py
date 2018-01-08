from hangman_methods import output_spaces, guess, hangman_icon
import os

print('Welcome to a version of hangman. Python Language. ')

secret_word = input('Please enter the secret word: ')
spaces = len(secret_word)
os.system('clear')

spaces_list = output_spaces(spaces)
print(spaces_list)

misses = 0

while spaces > 0 and misses != 5: 
  user_guess = input('Please enter your guess: ')
  spaces, list_space, misses = guess(spaces_list, secret_word, user_guess, spaces, misses)
  hangman_icon(misses)
  print(list_space)

if spaces == 0:
  print("That's a win for you.")
else:
  print("Better luck next time...")