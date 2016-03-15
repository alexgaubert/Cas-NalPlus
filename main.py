#! /usr/bin/python
#-*- coding: utf-8 -*-

from PyQt5.QtWidgets import QApplication, QMainWindow
from fenetre import Ui_MainWindow
import sys


if __name__ == "__main__":
   app = QApplication(sys.argv)
   window = QMainWindow()
   myapp = Ui_MainWindow()
   myapp.setupUi(window)
   window.show()
   sys.exit(app.exec_())
