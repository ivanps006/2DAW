const createVisitor = (name, age, ticketId) => ({ name, age, ticketId });

console.log(createVisitor("Ivan", 20, "Heeu2"));

const revokeTicket = (visitor) => ({name: visitor.name, age: visitor.age,ticketId: null});

const visitor = {
  name: 'Verena Nardi',
  age: 45,
  ticketId: 'H32AZ123',
};

console.log(revokeTicket(visitor));

const ticketStatus = (objSeg, id) => { 
    // Uso in para comprobar si el id esta dentro del objeto 
    if (!(id in objSeg)) { 
        return "unknown ticket id"; 
    } 
    
    if (objSeg[id] === null) { 
        return "not sold"; 
    } 
    
    return `sold to ${objSeg[id]}`; };


const simpleTicketStatus = (objSeg, id) => { 
  if (!(id in objSeg)) { 
    return "invalid ticket !!!"; 
  } 
  
  if (objSeg[id] === null) { 
    return "invalid ticket !!!"; 
  } 
  
  return objSeg[id]; };

const tickets = {
  '0H2AZ123': null,
  '23LA9T41': 'Verena Nardi',
};


console.log(ticketStatus(tickets, 'RE90VAW7'));
// => 'unknown ticket id'

console.log(ticketStatus(tickets, '0H2AZ123'));
// => 'not sold'

console.log(ticketStatus(tickets, '23LA9T41'));

// => 'sold to Verena Nardi'

console.log(simpleTicketStatus(tickets, '23LA9T41'));
// => 'Verena Nardi'

console.log(simpleTicketStatus(tickets, '0H2AZ123'));

// => 'invalid ticket !!!'

console.log(simpleTicketStatus(tickets, 'RE90VAW7'));

// => 'invalid ticket !!!'

const gtcVersion = (visitor) => {
  return visitor.gtc?.version;
}

const visitorNew = {
  name: 'Ivan',
  age: 20,
  ticketId: 'H32AZ123',
  gtc: {
    signed: true,
    version: '2.1',
  },
};

gtcVersion(visitorNew);
// => '2.1'

const visitorOld = {
  name: 'Ivan',
  age: 20,
  ticketId: 'H32AZ123',
};

gtcVersion(visitorOld);
// => undefined