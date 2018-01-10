struct node
{
  int data;
  node * next;
};

class list
{
  public: 
    list();
    ~list();
    void insert(int value);
    void display();
    bool search(int value);
    void remove(int value);
    int count();

  private:
    node * head;
    void insert(node *& head, int value);
    void display(node * head);
    bool search(node * head, int value);
    void remove(node *& head, int value);
    int count(node * head);
};
