<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label: Title
    type:  text
  head_title:
    label: Head Title
    type: textarea
  head_text:
    label: Text
    type:  textarea
    size:  large
  tiles:
    type: structure
    entry: >
      {{tile_title}} - {{tile_style}} - {{tile_cover}} - {{tile_page}}
    fields:
      tile_title:
        label: Title
        type:  text
      tile_style:
        label: Style
        type: select
        options:
          style1: Style 1
          style2: Style 2
          style3: Style 3
          style4: Style 4
          style5: Style 5
          style6: Style 6
        required: true
      tile_cover:
        label: Cover
        type: image
      tile_text:
        label: Text
        type:  textarea
        size:  large
      tile_page:
        type: page