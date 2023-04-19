import React from 'react';
import './styles.scss';

function Button(props) {
  return (
    <button className="button">
      {props.label}
    </button>
  );
}

export default Button;