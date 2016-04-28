<?php

class Buttons {

  static public $setup = array();

  public $texarea = null;
  public $buttons = array();

  public function __construct($textarea, $buttons = array()) {

    $this->textarea = $textarea;

    if(!is_array($buttons)) {
      $this->buttons = array_keys(static::$setup);
    } else {
      $this->buttons = $buttons;
    }

  }

  public function __toString() {

    $html  = '<nav class="field-buttons">';
    $html .= '<ul class="nav nav-bar">';

    foreach(static::$setup as $key => $button) {

      if(!in_array($key, $this->buttons)) continue;

      if(!empty($button['action'])) {
        $action = $this->textarea->model()->url('field/' . $this->textarea->name() . '/textarea/' . $button['action']);
      } else {
        $action = null;
      }

      $icon  = '<i class="icon fa fa-' . $button['icon'] . '"></i>';
      
      if(!empty($button['btext'])) {
        $btext = '<span class="btext">' . $button['btext'] . '</span>';
      } else {
        $btext = null;
      }
      if ($button['icon'])
      $html .= '<li class="field-button-' . $key . '">';
      $html .= html::tag('button', $icon . $btext , array(
        'type'                 => 'button',
        'tabindex'             => '-1',
        'title'                => @$button['label'] . ' (' . @$button['shortcut'] . ')',
        'class'                => 'btn',
        'data-editor-shortcut' => @$button['shortcut'],
        'data-tpl'             => @$button['template'],
        'data-text'            => @$button['text'],
        'data-action'          => $action
      ));

      $html .= '</li>';

    }

    $html .= '</ul>';
    $html .= '</nav>';

    return $html;

  }

}

buttons::$setup = array(
  'h1' => array(
    'label'    => $this->translation['buttons.h1.label'],
    'btext'    => '1',
    'text'     => ' ',
    'shortcut' => 'meta+1',
    'template' => '# {text}',
    'icon'     => 'header'
  ),
  'h2' => array(
    'label'    => $this->translation['buttons.h2.label'],
    'btext'    => '2',
    'text'     => ' ',
    'shortcut' => 'meta+2',
    'template' => '## {text}',
    'icon'     => 'header'
  ),
  'bold' => array(
    'label'    => $this->translation['buttons.bold.label'],
    'text'     => $this->translation['buttons.bold.text'],
    'shortcut' => 'meta+b',
    'template' => '**{text}**',
    'icon'     => 'bold'
  ),
  'italic' => array(
    'label'    => $this->translation['buttons.italic.label'],
    'text'     => $this->translation['buttons.italic.text'],
    'shortcut' => 'meta+i',
    'template' => '*{text}*',
    'icon'     => 'italic'
  ),
  'link' => array(
    'label'    => $this->translation['buttons.link.label'],
    'shortcut' => 'meta+shift+l',
    'action'   => 'link',
    'icon'     => 'chain'
  ),
  'page' => array(
    'label'    => $this->translation['buttons.pagelink.label'],
    'shortcut' => 'meta+shift+p',
    'action'   => 'pagelink',
    'icon'     => 'file'
  ),
  'email' => array(
    'label'    => $this->translation['buttons.email.label'],
    'shortcut' => 'meta+shift+e',
    'action'   => 'email',
    'icon'     => 'envelope'
  ),
);