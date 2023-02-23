#include <cmath>
#include <iostream>

bool is_smart_number(int num) {
  int val = (int) sqrt(num);

  return num / val == val && num % val == 0;
}

int main() {
  int test_cases;

  std::cin >> test_cases;

  int num;

  for (int i = 0; i < test_cases; i++) {
    std::cin >> num;

    bool answear = is_smart_number(num);

    if (answear) {
      std::cout << "YES" << std::endl;
    } else {
      std::cout << "NO" << std::endl;
    }
  }

  return 0;
}
