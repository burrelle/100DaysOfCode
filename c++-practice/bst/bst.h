#include <iostream>

struct node
{
  int data;
  node *left;
  node *right;
};

class bst
{
public:
  bst();
  ~bst();
  void insert(int value);
  int display();
  void inorder();
  void postorder();
  int count();
  int largest();
  int smallest();

private:
  node *root;
  void insert(node *&root, int value);
  int display(node *root);
  void inorder(node *root);
  void postorder(node *root);
  int count(node *root);
  int largest(node *root);
  int smallest(node *root);
};