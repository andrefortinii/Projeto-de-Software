import { Form } from "../../components/Form";
import { api } from "../../lib/axios";
import "./styles.css";
import { useNavigate } from 'react-router-dom';

function CreatePost() {
  const navigate = useNavigate();

  function handleCreatePost(data) {
    api.post('/posts', data);
    navigate('/Feed');
  }

  return (
    <div>
      <Form title={'Criar publicação'} textbutton={'Criar'} onAction={handleCreatePost} />
    </div>
  );
}

export default CreatePost; // Corrigido para exportação padrão
