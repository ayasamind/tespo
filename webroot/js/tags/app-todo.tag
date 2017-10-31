<app-todo>
    <div class="mdc-thema--primary">
        <form onsubmit={ createTask }>
            <select onchange={ selectForm } placeholder="フォームを選択" ref="changeForm">
                <option each={ form, i in forms } value={ i }>{ form.name }</option>
            </select>
            <button ref="taskName" class='mdc-button mdc-button--raised mdc-button--primary-light'>追加</button>
        </form>

        <div class="sortable">
            <div class="ui-state-default margin col-md-12" each={ task, key in tasks }>
                <p>{ tasks[key] }
                    <button id={ key } onclick={ deleteForm } class="deletebutton mdc-button">×</button></p>
                <div class="col-md-6">
                    <textarea ref='textarea{ key }' id={ key } class='form-control size' placeholder={ tasks[key] } onkeyup={ markdown }></textarea>
                </div>
                <div class="col-md-6">
                    <div class='markdown' ref='markdowntext{ key }'></div>
                </div>
                <p><button class='right mdc-button mdc-button--raised mdc-button--primary'>保存</button></p>
            </div>
        </div>
    </div>

    <script>
        //jquery-uiでフォームを動かせるように。
        $(function() {
            $( ".sortable" ).sortable({
                axis:'y',
                opacity: 0.5
            });
            $( ".sortable" ).disableSelection();
        });

        this.tasks = ["Question"]
        this.forms = [
            { name: 'Question'},
            { name: 'Answer'},
            { name: 'Examples'}
        ]

        this.text = []

        createTask(e)
        {
            e.preventDefault()
            //追加されたフォームの種類を取得
            var selectedFormNumber = this.refs.changeForm.value
            this.text.push('');
            this.tasks.push(this.forms[selectedFormNumber].name)
        }

        markdown(e)
        {
            e.preventDefault()
            var inputtext = e.target.value
            if (this.text==''){
                this.text.push(inputtext)
            }else {
                this.text.splice(e.target.id, 1, inputtext)
            }
            var formId = e.target.id
            var output = eval('this.refs.markdowntext' + formId)
            output.innerHTML = marked(inputtext)
        }

        deleteForm(e)
        {
            var textarea = eval('this.refs.textarea' + e.target.id)
            var output = eval('this.refs.markdowntext' + e.target.id)
            this.tasks.splice(e.target.id,1)//フォーム一覧から削除
            if (textarea.value==''){
                return
            }
            this.text.splice(e.target.id,1) //テキスト配列から削除
            this.text.push("")
            for(var i=0; i<=this.tasks.length-1; i++){
                    var textarea = eval('this.refs.textarea' + i)
                    textarea.value = this.text[i];
                    var output = eval('this.refs.markdowntext' + i)
                    output.innerHTML = marked(this.text[i])
            }
            this.text.pop()
        }

    </script>
    <style>
        form{
            float:right;
        }
        p{
            text-align:left;
        }
        textarea{
            resize:none;
        }
        .size{
            height:150px;
        }
        .markdown{
            height:150px;
        }
        .right{
            float:right
        }
        .margin{
            margin-bottom:10;
        }
        .deletebutton{
            float:right;
        }
    </style>
</app-todo>