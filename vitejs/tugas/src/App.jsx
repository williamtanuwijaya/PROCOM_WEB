import { useState } from 'react';
import './App.css';

function App() {
  const [angka1, setAngka1] = useState(0);
  const [angka2, setAngka2] = useState(0);
  const hasil = angka1 + angka2;
 

  return (
    <>
      <div className='hero'>
      <div className="menu">
        <input type="number" name="1" id="angka1" className="number" onChange={(e) => setAngka1(Number(e.target.value))}/>
        
        <input type="number" name="2" id="angka2" className="number" onChange={(e) => setAngka2(Number(e.target.value))}/>

        <p>Hasil: {hasil}</p>
      </div>
      </div>
    </>
  );
}

export default App;
