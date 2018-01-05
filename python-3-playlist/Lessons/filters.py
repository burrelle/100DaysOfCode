grades = ['A', 'B', 'F', 'C', 'F', 'A']

def removeF(grade):
  return grade != 'F'

print(list(filter(removeF, grades)))

# filtered_grades = []
# for g in grades:
#   if g != 'F':
#     filtered_grades.append(g)

# print(filtered_grades)

print([grade for grade in grades if grade != 'F'])