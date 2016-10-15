<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - default
    - tiles
fields:
  title:
    label: Title
    type:  text
  site_title:
    label: Site Title
    type: text
  logo:
    label: Logo
    type: text
  author:
    label: Author
    type:  text
  email:
    label: Email
    type: text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  copyright:
    label: Copyright
    type:  textarea
  social_icons:
    label: Social icons
    type: structure
    entry: >
      {{social_icon_class}} - {{social_icon_name}} - {{social_icon_link}}
    fields:
      social_icon_class:
        label: CSS Class
        type: text
      social_icon_name:
        label: Name
        type: text
      social_icon_link:
        label: Link
        type: text