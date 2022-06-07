import java.util.*;
class friends {
	
    public static void main(String args[]){
         int i;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter how many names you want: ");
        int n = sc.nextInt();
        LinkedList li = new LinkedList();
        for (i = 1; i <= n; i++) {
            System.out.println("Enter Names: " + i);
            String name = sc.nextLine();
            li.add(name);
        }
        System.out.println("After adding names: " + li);
    }
}
