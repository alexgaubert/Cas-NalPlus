#! /usr/bin/python
#-*- coding: utf-8 -*-

from PyQt5.QtWidgets import QApplication
from fenetre import MainWindow
import sys

if __name__ == "__main__":
   app = QApplication(sys.argv)
   myapp = MainWindow()
   myapp.show()
   sys.exit(app.exec_())
