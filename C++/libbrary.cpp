#include <iostream>
#include <string>

using namespace std;

class book
{
	string name;
	int publishYear;
	int quantity;

public:

    book() : name("Unknow"), publishYear(2010), quantity(1) {}
    book(string n,int pub,int qua) : name(n), publishYear(pub), quantity(qua){}
	
	string get_name() const { return name; }
	int get_publishYear() const { return publishYear; }
	int get_quantity() const { return quantity; }

    void set_name(string sName) { name = sName; }
    void set_publishYear(int sPublishYear) { publishYear = sPublishYear; }
    void set_quantity(int sQuantity) { quantity = sQuantity; }

	void printBoopInfo();
};

class library
{
	string lName;
	book array[100];
	int count;

public:

    library() : lName("Unknow"), count(0) {}
    library(string n) : lName(n), count(0) {}

	int get_count() const { return count; }
    string getLibraryName() const { return lName; }

    void setLibraryName(string n) { lName = n; }

	void addBook(book);
	bool borrowBook(string);
	bool returnBook(string);
	void printAllBooks();
};

void book::printBoopInfo()
{
    cout << "Book Name :- " << name << endl;
    cout << "Publish Year :- " << publishYear << endl;
    cout << "Quantity :- " << quantity << endl;
}

void library::addBook(book obj)
{
    if (count == 0)
    {
        array[count] = obj;
    }
    else
    {
        int i;
        for ( i = 0; i < count; i++)
        {
            if (array[i].get_name() == obj.get_name())
            {
                if (array[i].get_publishYear() == obj.get_publishYear())
                {
                    array[i].set_quantity(array[i].get_quantity() + obj.get_quantity())
                    ;
                    return;
                }
            }
        }
        array[count] = obj;
    }
    count++;
}

bool library::borrowBook(string bBook)
{
    int i;
    for ( i = 0; i < count; i++)
    {
        if (bBook == array[i].get_name())
        {
            if (array[i].get_quantity() >= 1)
            {
                array[i].set_quantity(array[i].get_quantity() -1 );
                return true;
            }
        }
    }
    cout << "Book is note Available for now..!" << endl;
    return false;
}

bool library::returnBook(string rBook)
{
    int i;
    for ( i = 0; i < count; i++)
    {
        if (rBook == array[i].get_name())
        {
            array[i].set_quantity(array[i].get_quantity() +1);
            return true;
        }
    }
    cout << "This name of book is not Available..!!" << endl;
    return false;
}

void library::printAllBooks()
{
    int i;
    for ( i = 0; i < count; i++)
    {
        if (count == 0)
        {
            cout << "No Book Available..!" << endl;
            return;
        }
        array[i].printBoopInfo();
        cout << endl;
    }
}

int main()
{
    library L[10];
	int libraryCount = 0;

    while (true)
    {
        cout << "1 :- Go to library." << endl;
        cout << "2 :- Add library." << endl;
        cout << "3 :- Delete library." << endl;
        cout << "4 :- Exit." << endl;
        cout << "What do you want to do :- ";
        int chooseOption;
        cin >> chooseOption;

		string libraryName;

        bool isLibraryFound = true;
        switch (chooseOption)
        {
        case 1:
            while (true)
            {
                for (int i = 0; i < libraryCount; i++)
                {
                    cout << i << " :- " << L[i].getLibraryName() << endl;
                }
                cout << "10 :- exit" << endl;
                cout << "Where would you like to go? :- ";
                int chooseLibrary;
                cin >> chooseLibrary;
                cout << "\n";

                if (chooseLibrary == 10)
                {
                    break;
                }
                
                bool flag1 = false;
                if (chooseLibrary <= libraryCount)
                {
                    if (chooseLibrary >= 0)
                    {
                        flag1 = true;
                    }
                    else
                    {
                        cout << "Enter valide number..!" << endl;
                    }  
                }
                else
                {
                    cout << "Enter valide number..!" << endl;
                }
                
                while (flag1)
                {
                    cout << "1 :- Add Book." << endl;
                    cout << "2 :- Borrow book." << endl;
                    cout << "3 :- Return book." << endl;
                    cout << "4 :- Print All Books." << endl;
                    cout << "5 :- Exit." << endl;
                    cout << "\nWhat do you want ? :- ";
                    int choose;
                    cin >> choose;
                    cout << "\n";

                    string n;
                    int p,q;
                    book b;
                        
                    switch (choose)
                    {
                    case 1:

                        cout << "Enter Book Name :- ";
                        cin >> n;
                        cout << "Enter Publish Year :- ";
                        cin >> p;
                        cout << "Enter Quantity :- ";
                        cin >> q;

                        b.set_name(n);
                        b.set_publishYear(p);
                        b.set_quantity(q);

                        L[chooseLibrary].addBook(b);

                        cout << "Book was added successfully..!" << endl;
                        break;

                    case 2:

                        L[chooseLibrary].printAllBooks();        

                        cout << "Which book would you like to borrow :- ";
                        cin >> n;

                        if (L[chooseLibrary].borrowBook(n))
                        {
                            cout << "The book has been taken";
                        }
                        break;
                    
                    case 3:

                        cout << "Which book would you like to return :- ";
                        cin >> n;

                        if (L[chooseLibrary].returnBook(n))
                        {
                            cout << "The book has been returned";
                        }
                        break;

                    case 4:

                        L[chooseLibrary].printAllBooks();
                        break;
                    
                    case 5:
                    
                        flag1 = false;
                        break;

                    default:

                        cout << "Plz..Choose valide option..!!" << endl;
                        break;
                    }
                }
            }
            break;
        
		case 2:

			cout << "Enter library Name :- ";
			cin >> libraryName;
			L[libraryCount] = library(libraryName);
			libraryCount++;
			break;

		case 3:

			cout << "Enter library Name :- ";
			cin >> libraryName;
			for (int i = 0; i < libraryCount; i++)
			{
				if (L[i].getLibraryName() == libraryName)
				{
					for (int j = 0; j < libraryCount -1; j++)
                    {
                        L[j] = L[j+1];
                    }
                    libraryCount--;
                    isLibraryFound = false;
                    break;
				}
			}
            if (isLibraryFound)
            {
                cout << "library note found..!" << endl;
            }
            
			break;

        case 4:
        
            return 0;

        default:
            cout << "Enter valide number..!" << endl;
            break;
        }
    }
    
	return 0;
}