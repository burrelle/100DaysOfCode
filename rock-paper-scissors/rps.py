def choice(player_num, player_input):
    if player_input == 'r' or player_input == 's' or player_input == 'p':
        return player_input
    else:
        return 0


def battle(p1, p2):
    if p1 == p2:
        return "It's a draw!"
    if (p1 == 'r' and p2 == 's') or (p1 == 's' and p2 == 'r'):
        return 'Rock beats scissors'
    if (p1 == 'r' and p2 == 'p') or (p1 == 'p' and p2 == 'r'):
        return 'Paper covers rock'
    if (p1 == 'p' and p2 == 's') or (p1 == 's' and p2 == 'p'):
        return 'Scissors cut paper'
    else:
        return 'Cannot determine outcome'


def num_rounds():
    return int(input('How many rounds would you like to play? '))
