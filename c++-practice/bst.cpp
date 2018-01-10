#include "bst.h"
using namespace std;

bst::bst()
{
  root = NULL;
}

bst::~bst()
{
}

void bst::insert(int value)
{
  return insert(root, value);
}

void bst::insert(node *&root, int value)
{
  if (!root)
  {
    root = new node;
    root->data = value;
    root->left = NULL;
    root->right = NULL;
  }
  else
  {
    if (value < root->data)
    {
      return insert(root->left, value);
    }
    if (value >= root->data)
    {
      return insert(root->right, value);
    }
  }
}

int bst::display()
{
  return display(root);
}

int bst::display(node *root)
{
  if (!root)
    return 0;
  cout << root->data << " ";
  return display(root->left) + display(root->right);
}

void bst::inorder()
{
  return inorder(root);
}

void bst::inorder(node *root)
{
  if (!root)
    return;
  inorder(root->left);
  cout << root->data << " ";
  inorder(root->right);
}

void bst::postorder()
{
  return postorder(root);
}

void bst::postorder(node *root)
{
  if (!root)
    return;
  inorder(root->right);
  cout << root->data << " ";
  inorder(root->left);
}

int bst::count()
{
  return count(root);
}

int bst::count(node *root)
{
  if (!root)
    return 0;
  return count(root->left) + count(root->right) + 1;
}

int bst::largest()
{
  return largest(root);
}

int bst::largest(node *root)
{
  if (!root)
    return 0;
  if (root->right == NULL)
  {
    return root->data;
  }
  return largest(root->right);
}

int bst::smallest()
{
  return smallest(root);
}

int bst::smallest(node *root)
{
  if (!root)
    return 0;
  if (root->left == NULL)
  {
    return root->data;
  }
  return smallest(root->left);
}
