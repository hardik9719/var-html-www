<?php')
        .blank()
  }

  if (!~helpers.methods.indexOf(source.method.toUpperCase())) {
    code.push('HttpRequest::methodRegister(\'%s\');', source.method)
  }

  code.push('$request = new HttpRequest();')
      .push('$request->