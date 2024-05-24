import React from 'react';
import PropTypes from 'prop-types';
import TextField from '@mui/material/TextField';

const Input = ({ id = 'outlined-basic', label }) => {

    return (
        <TextField id={id} label={label}/>
    );
}

Input.propTypes = {
    id: PropTypes.string,
    label: PropTypes.string,
    variant: PropTypes.string
}

// defaultPropsの仕様は非推奨、
// 代わりにデフォルトパラメータを使用すること。

// Input.defaultProps = {
//     id: 'outlined-basic',
//     label: 'Outlined',
//     variant: 'outlined'
// }

export default Input