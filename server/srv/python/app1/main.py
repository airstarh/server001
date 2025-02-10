import os
from flask import send_from_directory
from flask import Flask, render_template, make_response

app = Flask(__name__)


##################################################
# region XXX
# endregion XXX
##################################################


##################################################
# region BASIS

####################
# region MAIN MENU
def menu():
    return render_template('_base/menu.html')


app.jinja_env.globals.update(menu=menu)


# endregion MAIN MENU
####################

def html(content: str):
    return render_template(
        '_base/html.html',
        content=content
    )


####################
# region FAVICON
@app.route('/favicon.ico')
def faviconIco():
    return send_from_directory(os.path.join(app.root_path, 'static'), 'favicon.ico', mimetype='image/vnd.microsoft.icon')


@app.route('/favicon.svg')
def faviconSvg():
    return send_from_directory(os.path.join(app.root_path, 'static'), 'favicon.svg', mimetype='image/svg+xml')


# endregion FAVICON
####################

# endregion BASIS
##################################################
# region ROUTES

@app.route('/')
@app.route('/index')
@app.route('/index_old_school')
@app.route('/index.html')
def index():
    content = render_template('_route/index.html')
    page = html(content)
    response = make_response(page)
    response.headers['X-Parachutes'] = 'parachutes are cool'
    return response


@app.route('/index_jinja')
def index_jinja():
    foo = '<h2>The h2 header!</h2>'
    tbl = [
        ['как же', 'я', 'заебался'],
        ['рендерить', 'эту', 'блядскую'],
        ['таблицу', 'в ебучем', 'Питоне']
    ]
    content = render_template('_route/index_jinja.html', foo=foo, tbl=tbl)
    ###page = html(content)
    response = make_response(content)
    response.headers['X-Parachutes'] = 'parachutes are cool'
    return response


# endregion ROUTES
##################################################
# region RUN SERVER
if (__name__ == '__main__'):
    app.run(host="0.0.0.0", port=44444, debug=True)

# endregion RUN SERVER
##################################################
