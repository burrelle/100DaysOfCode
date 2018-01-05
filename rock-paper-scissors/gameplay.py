import rps

print('Welcome to the classic game of Rock, Paper, Scissors. ')


def gameplay():
    rounds = rps.num_rounds()
    for _round in range(rounds):
        print(f'Round {_round +1}')
        player_input1 = input(
            f'Player 1, please choose rock (r), paper (p), or scissors(s): ')
        player1 = rps.choice(1, player_input1)
        if isinstance(player1, int):
            print('Invalid input')
        player_input2 = input(
            f'Player 2, please choose rock (r), paper (p), or scissors(s): ')
        player2 = rps.choice(2, player_input2)
        if isinstance(player2, int):
            print('Invalid input')
        outcome = rps.battle(player1, player2)
        print(outcome)


gameplay()
