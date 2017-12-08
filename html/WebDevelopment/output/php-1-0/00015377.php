<?php')
        .blank()
  }

  code.push('$client = new http\\Client;')
      .push('$request = new http\\Client\\Request;')
      .blank()

  switch (source.postData.mimeType) {
    case 'application/x-www-form-urlencoded':
      code.push('$body = new http\\Message\\Body;')
          .push('$body->