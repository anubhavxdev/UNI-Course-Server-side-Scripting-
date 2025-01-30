import java.util.Scanner;

public class index {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int num1 = scanner.nextInt();
        int num2 = scanner.nextInt();
        scanner.close();

        String result = (num1 > 0 && num2 > 0 && num1 % 2 != 0 && num2 % 2 != 0) 
                        ? "Both integers are positive and not multiples of 2" 
                        : "The condition is not met for both integers";
        System.out.println(result);
    }
}
