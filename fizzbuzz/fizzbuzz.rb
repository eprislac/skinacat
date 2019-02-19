# frozen_string_literal: true

# Plugin to extend Integer class in ruby to give 'FizzBuzziness' of the number
class Integer
  # @name fizzbuzziness
  # @belongs_to Integer
  # @description
  #   If the Integer is a multiple of 3, 'Fizz'
  #   If the Integer is a multiple of 5, 'Buzz'
  #   If the Integer is a multiple of 3 and 5, 'FizzBuzz'
  #   If the Integer is not a multiple of 3 or 5, outputs an empty string
  #
  # @return [String] The 'FizzBuzziness' of the Integer
  def fizzbuzziness
    { 'Fizz' => (self % 3).zero?, 'Buzz' => (self % 5).zero? }
      .select { |_key, value| value }
      .keys
      .inject('') { |prev, curr| "#{prev}#{curr}" }
  end
end
