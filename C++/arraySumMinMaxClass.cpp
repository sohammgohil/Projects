#include <iostream>
using namespace std;

class array
{
    int arraySize;
    int a[50];

    int sumArray();
    int min();
    int max();
    float avg();
    void printArray();

public:

    void initialization();
    void initialization(int b[],int size);
    void printStats();
};

void array::initialization(){

    cout << "Enter size of array :- ";
    cin >> arraySize;
    cout << "\n";

    for (int i = 0; i < arraySize; i++)
    {
        cout << "Enter your value " << i+1 << " :- ";
        cin >> a[i];
    }
}

void array::initialization(int b[],int size){

    cout << "\n";

    for (int i = 0; i < size; i++)
    {
        cout << "Enter your value " << i+1 << " :- ";
        cin >> b[i];
    }

    arraySize = size;
    for (int i = 0; i < size; i++)
    {
        a[i] = b[i];
    }
}

int array::sumArray(){

    int sum = 0;

    for (int i = 0; i < arraySize; i++)
    {
        sum += a[i];
    }
    
    return sum;
}

int array::min(){

    int min = a[0];

    for (int i = 0; i < arraySize; i++)
    {
        if (min > a[i])
        {
            min = a[i];
        }
    }

    return min;
}

int array::max(){

    int max = a[0];

    for (int i = 0; i < arraySize; i++)
    {
        if (max < a[i])
        {
            max = a[i];
        }
    }

    return max;
}

float array::avg(){

    float avg = sumArray();
    avg = avg/arraySize;

    return avg;
}

void array::printStats(){

    cout << "\nSize of array :- " << arraySize << endl;
    printArray();
    cout << "Sum :- " << sumArray() << endl;
    cout << "Minimum :- " << min() << endl;
    cout << "Maximum :- " << max() << endl;
    cout << "Avg :- " << avg() << endl;

}

void array::printArray()
{
    for (int i = 0; i < arraySize; i++)
    {
        cout << "a[" << i << "] :- " << a[i] << " :- " << &a[i] << endl;
    }
}

int main()
{
    array a1;
    a1.initialization();
    a1.printStats();
 
    array abc;
    int a[50],c;
    cout << "\nEnter your array size :- ";
    cin >> c;
    abc.initialization(a,c);
    abc.printStats();
    
    array a3;
    int b[23];
    char d;
    float f;
    a3.initialization();
    a3.printStats();

    return 1;
}
