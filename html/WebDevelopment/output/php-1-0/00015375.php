<?php')
        .blank()
  }

  code.push('$curl = curl_init();')
      .blank()

  var curlOptions = [{
    escape: true,
    name: 'CURLOPT_PORT',
    value: source.uriObj.port
    }, {
    escape: true,
    name: 'CURLOPT_URL',
    value: source.fullUrl
    }, {
    escape: false,
    name: 'CURLOPT_RETURNTRANSFER',
    value: 'true'
    }, {
    escape: true,
    name: 'CURLOPT_ENCODING',
    value: ''
    }, {
    escape: false,
    name: 'CURLOPT_MAXREDIRS',
    value: opts.maxRedirects
    }, {
    escape: false,
    name: 'CURLOPT_TIMEOUT',
    value: opts.timeout
    }, {
    escape: false,
    name: 'CURLOPT_HTTP_VERSION',
    value: source.httpVersion === 'HTTP/1.0' ? 'CURL_HTTP_VERSION_1_0' : 'CURL_HTTP_VERSION_1_1'
    }, {
    escape: true,
    name: 'CURLOPT_CUSTOMREQUEST',
    value: source.method
    }, {
    escape: true,
    name: 'CURLOPT_POSTFIELDS',
    value: source.postData ? source.postData.text : undefined
  }]

  code.push('curl_setopt_array($curl, array(')

  var curlopts = new CodeBuilder(opts.indent, '\n' + opts.indent)

  curlOptions.map(function (option) {
    if (!~[null, undefined].indexOf(option.value)) {
      curlopts.push(util.format('%s =>