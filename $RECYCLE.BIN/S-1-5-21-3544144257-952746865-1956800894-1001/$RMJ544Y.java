import java.util.*;
class cities
{
    public static void main(String args[]){
        ArrayList a1= new ArrayList();
        a1.add("nashik");
        a1.add("Pune");
        a1.add("Mumbai");
        a1.add("Nagpur");
        a1.add("Aurangabad");
        System.out.println("After adding"+a1);
        a1.removeAll(a1);
        System.out.println("After deleting"+a1);
    }
} 