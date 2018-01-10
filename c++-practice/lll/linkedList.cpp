#include <iostream>
#include "linkedList.h"
using namespace std;

list myList;

int main()
{

  myList.insert(1);
  myList.insert(5);
  myList.insert(7);
  myList.insert(4);
  myList.insert(3);

  int counter1 = 0;
  counter1 = myList.count();
  cout << "Linked list nodes: " << counter1 << endl;

  myList.display();
  cout << endl;

  int key;
  cout << "Search the list?: ";
  cin >> key;
  cin.ignore(100, '\n');

  bool retVal = myList.search(key);
  if (retVal == true)
  {
    cout << "Search success." << endl;
  }
  else
    cout << "Search failure." << endl;
  ;

  int toDelete;
  cout << "Delete a node?: ";
  cin >> key;
  cin.ignore(100, '\n');
  myList.remove(key);

  int counter2 = 0;
  counter2 = myList.count();
  cout << "Linked list nodes: " << counter2 << endl;
  myList.display();

  return 0;
}

list::list()
{
  head = NULL;
}

list::~list()
{
  //TODO: Write a destructor to delete list.
  //deleteAll()
}

void list::insert(int value)
{
  return insert(head, value);
}

void list::insert(node *&head, int value)
{
  if (!head)
  {
    head = new node;
    head->data = value;
    head->next = NULL;
  }
  else
    return insert(head->next, value);
}

void list::display()
{
  return display(head);
}

void list::display(node *head)
{
  if (!head)
  {
    return;
  }
  else
    cout << head->data << " ";
  return display(head->next);
}

bool list::search(int value)
{
  return search(head, value);
}

bool list::search(node *head, int value)
{
  if (!head)
    return false;
  if (head->data == value)
    return true;
  else
    return search(head->next, value);
}

void list::remove(int value)
{
  return remove(head, value);
}

void list::remove(node *&head, int value)
{
  if (!head)
    return;

  if (search(value) == false)
    return;

  if (head->data != value)
    return remove(head->next, value);

  if (head->data == value)
  {
    node *temp = head;
    head = head->next;
    head->next = NULL;
    delete temp;
  }

  //Delete's all of the nodes except the last one.
  //Last one produces segmentation fault. '

  return remove(head->next, value);
}

int list::count()
{
  return count(head);
}

int list::count(node *head)
{
  if (!head)
    return 0;
  return count(head->next) + 1;
}
