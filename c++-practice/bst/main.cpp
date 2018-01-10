#include "bst.h"
#include <iostream>
using namespace std;

bst myBST;

int main()
{
  myBST.insert(5);
  myBST.insert(2);
  myBST.insert(1);
  myBST.insert(3);
  myBST.insert(7);
  myBST.insert(6);
  myBST.insert(9);

  //       5
  //   2      7
  // 1   3   6  9

  cout << "Display all data: ";
  myBST.display();
  cout << endl;

  cout << "Display inorder data: ";
  myBST.inorder();
  cout << endl;

  cout << "Display post order data: ";
  myBST.postorder();
  cout << endl;

  cout << "There are this many nodes: ";
  int returnVal = myBST.count();
  cout << returnVal;
  cout << endl;

  cout << "This is the largest node: ";
  int returnVal1 = myBST.largest();
  cout << returnVal1;
  cout << endl;

  cout << "This is the smallest node: ";
  int returnVal2 = myBST.smallest();
  cout << returnVal2;
  cout << endl;

  return 0;
}