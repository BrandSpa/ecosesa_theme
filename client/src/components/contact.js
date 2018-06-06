import React, { Component } from 'react';
import request from 'axios';
import qs from 'qs';
const endpoint = '/wp-admin/admin-ajax.php';

class Contact extends Component {
  state = {
      name: '',
      email: '',
      phone: '',
      subject: '',
      mensaje: '',
      privacy: true,
      protection: '',
      errors: {}
  }

  handleChange = e =>  {
    let { name, value } = e.target;
    this.setState({ [name]: value });
  }

  toggleCheckbox = e => {
    const { name } = e.target;
    this.setState({[name]: !this.state[name]});
  }

  handleSubmit = e => {
    e.preventDefault();
    const data = qs.stringify({action: 'store_contact', data: this.state});
      request
      .post(endpoint, data)
      .then(({data}) => {

        if(data.success == false) {
          return this.setState({errors: data.errors});
        }

        return this.setState({success: data.success});

      })
  }

  render() {
    const {
      name,
      email,
      phone,
      subject,
      mensaje,
      privacy,
      privacyErr,
      errors,
      success,
      protection
    } = this.state;

    if(success) return (<h5 style={{textAlign: 'center', color: '#fff'}}>{this.props.message}</h5>);

    return (
      <form className="form-contact" onSubmit={this.handleSubmit}>
        <div className="form-group">
          <input
            name="name"
            type="text"
            className="form-control"
            placeholder="Nombre"
            onChange={this.handleChange}
            value={name}/>
          <div className="input-error" style={ errors.name ? {display: 'block'} : {display: 'none'}}>{errors.name}</div>
        </div>

        <div className="form-group">
          <input
            name="email"
            type="text"
            className="form-control"
            placeholder="Email"
            onChange={this.handleChange}
            value={email}/>
          <div className="input-error" style={ errors.email ? {display: 'block'} : {display: 'none'}}>{errors.email}</div>
        </div>

        <div className="form-group">
          <input
            name="subject"
            type="text"
            className="form-control"
            placeholder="Asunto"
            onChange={this.handleChange}
            value={subject}/>
        </div>

        <div className="form-group">
          <textarea
            name="mensaje"
            rows="4"
            className="form-control"
            placeholder="Mensaje"
            onChange={this.handleChange}
            value={mensaje}/>
          <div className="input-error" style={ errors.mensaje ? {display: 'block'} : {display: 'none'}}>{errors.mensaje}</div>
        </div>

        <button className="btn" style={{background: '#1689fe', color: '#FFF'}}>ENVIAR</button>
      </form>
    )
  }
}

export default Contact;
