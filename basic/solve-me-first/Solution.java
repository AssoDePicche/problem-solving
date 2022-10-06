import java.util.Scanner;

class Solution {
    private static int sum(int a, int b) {
        return a + b;
    }

    public static void main(String[] args) {
        try (Scanner scanner = new Scanner(System.in)) {
            int a, b, sum;

            a = scanner.nextInt();
            b = scanner.nextInt();

            sum = sum(a, b);

            System.out.println(sum);
        }
    }
}