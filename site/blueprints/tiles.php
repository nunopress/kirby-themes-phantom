<?php if(!defined('KIRBY')) exit ?>

title: Tiles
pages: false
fields:
  title:
    label: Title
    type:  text
  style:
    label: Style
    type: select
    options:
      - 1
      - 2
      - 3
      - 4
      - 5
      - 6
    default: 0
  cover:
    label: Cover
    type: text
  text:
    label: Text
    type:  textarea
    size:  large