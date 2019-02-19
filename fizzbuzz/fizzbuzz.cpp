#include <iostream>
#include <string>
#include <map>
#include <vector>
#include <numeric>

using namespace std;

map<string, bool, greater<string>> fbMap(int num) {
  map<string, bool, greater<string>> tbl;
  tbl["Fizz"] = num % 3 == 0;
  tbl["Buzz"] = num % 5 == 0;
  return tbl;
}

vector<string> trueKeys(map<string, bool, greater<string>> myMap) {
  vector<string> arr;
  arr.reserve(2);
  for(const auto & [key, val]: myMap) {
    string item = val ? key : ""; // FAILURE! Had to include a ternary conditional
    arr.push_back(item);
  }
  return arr;
}

string trueKeysJoined(vector<string> arr) {
  string retVal;
    retVal = accumulate(arr.begin(), arr.end(), string(""));
  return retVal;
}

string fizzbuzziness(int num) {
  return trueKeysJoined(trueKeys(fbMap(num)));
}

int main() {
  int num;

  cout << "Please input a whole-number value:" << endl;
  cin >> num;
  cout << fizzbuzziness(num) << endl;
  return 0;
}

