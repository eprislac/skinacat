#!/bin/sh
exec scala "$0" "$@"
!#
object hereKitty {
	def main(args: Array[String]) {
		println("Here kitty kitty...")
	}
}

hereKitty.main(args)
