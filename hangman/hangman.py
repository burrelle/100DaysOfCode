from hangman_methods import output_spaces, guess

print('Welcome to a version of hangman. Python Language. ')

secret_word = input('Please enter the secret word: ')
spaces = len(secret_word)

spaces_list = output_spaces(spaces)
print(spaces_list)


while spaces > 0: 
  user_guess = input('Please enter your guess: ')
  spaces, list_space = guess(spaces_list, secret_word, user_guess, spaces)
  print(list_space)

print("That's a win for you.")