class book
{
     private String author;
     private String title;
     private int pages;
     private String shelfNumber;
     private Boolean available;
     private int numborrowing;
 
     public book(String a,String t,int p,String s)
     {
          author=a;
          title=t;
          pages=p;
          shelfNumber=s;
          available=true;
          numborrowing=0;
     }
     public String getAuthor() { return author; }
     public String getTitle() { return title; }
     public int getPages() { return pages; }
     public String getShelfNumber( ){ return shelfNumber; }
     public Boolean getavailable() { return available; }
     public int getnumborrowing() { return numborrowing; }
     
     public void borrowBook()
     {
          available=false;
          numborrowing++;
     }

     public void returnBook()
     {
          available=true;
     }
     
     public String toString()
     {
          /*  return     "Title: " + title + "\n" +
                         "Author: " + author + "\n" +
                         "Pages: " + pages + "\n" +
                         "Shelf Number: " + shelfNumber + "\n" +
                         "Number of times borrowed: " + numborrowing;
          */
          return title+"\t"+author+"\t"+shelfNumber;
     }
}
class library
{
     private String libraryname;
     private book[] books;
     private int collectionSize;
     private String addres;
     private String openingHours;
     
     public library(String l,String s)
     {
          libraryname=l;
          addres=s;
          books=new book[500];
          collectionSize=0;
          openingHours="9:00 to 21:00";
     }
     
     public Boolean addBook(book b1)
     {
          for(int i=0;i<collectionSize;i++)
          {
               if (books[i].getTitle().equals(b1.getTitle()))
               {
                    System.out.println("books already exists.");  
                    return false;
               }
          }
     
          books[collectionSize] = b1;
          collectionSize++;
          return true;
     }

     public void removebook(String s)
     {
          for (int i = 0; i < collectionSize; i++)
          {
               if (books[i].getTitle().equals(s))
               {
                    for (int j = i; j<collectionSize - 1; j++)
                    {
                         books[j] = books[j + 1];
                    }
                    
                    books[collectionSize-1] = null;
                    collectionSize--;
                    return;
               }
          }
          System.out.println("Book not found in the collection");
     }

     public void borrowbook(String b)
     {
          for(int i=0;i<collectionSize;i++)
          {
               if (books[i].getTitle().equals(b))
               {
                    if (books[i].getavailable()==true)
                    {
                         books[i].borrowBook();
                         return;
                    }
               }
          }
          System.out.println("Book not found in the collection");
     }

     public void  returnbook(String t)
     {
          for(int i=0;i<collectionSize;i++)
          {
               if (books[i].getTitle().equals(t))
               {
                    if (books[i].getavailable()==false)
                    {
                         books[i].returnBook();
                         return;
                    }
               }
          }
          System.out.println("book not found ");
     }

     public String toString()
     {
          return "name of the library : "+libraryname +"\nAddress : "+addres+"\nopening time of library : "+openingHours;
     }

     public void listBook()
     {
          System.out.println("update books details are here with available status ");
          System.out.println("------------------------------------------------------");
          System.out.println("name"+"\tauthor"+"\tshelfnumber"+"\tavailable");
          
          for(int i=0;i<books.length;i++)
          {
               System.out.print(books[i].getTitle());
               System.out.print("\t"+books[i].getAuthor());
               System.out.print("\t"+books[i].getShelfNumber());
               System.out.print("\t"+books[i].getavailable());
               System.out.println("\n");
          }
     }
}

class lab22driver
{
     public static void main(String[] args)
     {
          System.out.println("wlecome in library");
          System.out.println("-----------------------------");
          
          book book1 = new book("balaguru", "c", 400, "A3");
          book book2 = new book("denis", "java", 400, "A4");
          
          System.out.println("name"+"\tauthor"+"\tshelfnumber");
          System.out.println(book1.toString());
          System.out.println(book2.toString());
          
          library l1=new library("kskvku","bhuj-kutch");
          
          System.out.println(l1.toString());
          
          l1.addBook(book1);
          l1.addBook(book2);
          l1.removebook("c");
          l1.borrowbook("java");
          
          l1.listBook();
     }
}