from random import randint

welcome = print('Welcome to the random number guessing game.')

golden_number = randint(0, 100)


def guess_num():
    user_input = int(input('Please guess a number between 0 and 100: '))
    error(user_input)
    return user_input


def error(guess_check):
    if guess_check < 0 or guess_check > 100:
        print('Out of bounds.')
        guess_num()
        return 
    else:
        return 

guess = guess_num()
# print(golden_number)

while guess != golden_number:
    if guess < golden_number:
        print('Guess higher!')
        guess = guess_num()
    elif guess > golden_number:
        print('Guess lower!')
        guess = guess_num()

print('Great guessing. You got it!')
