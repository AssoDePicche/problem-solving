#include <iostream>

std::string strings_xor(std::string s, std::string t) {
  std::string res = "";

  for(int i = 0; i < s.size(); i++) {
    res += (s[i] == t[i]) ? '0' : '1';
  }

  return res;
}

int main() {
  std::string s, t;

  std::cin >> s >> t;

  std::cout << strings_xor(s, t) << std::endl;

  return 0;
}
