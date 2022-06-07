import java.util.*;
class friends {
    public static void main(String args[]) throws Exception 
    {
        int i;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter how many names you want ");
        int n = sc.nextInt();
        LinkedList li = new LinkedList();
        for (i = 0; i < n; i++) 
        {
            System.out.println("Enter name " + i);
            String name = sc.nextLine();
            li.add(name);
        }
        System.out.println("After adding name: " + li);
    }

}